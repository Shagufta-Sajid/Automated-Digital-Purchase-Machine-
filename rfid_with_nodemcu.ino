#include <ESP8266WiFi.h>
#include <WiFiClient.h>
#include <ESP8266WebServer.h>
#include <ESP8266mDNS.h>
#include <SPI.h>
#include <MFRC522.h>

#define RST_PIN D3
#define SS_PIN D4
MFRC522 mfrc522(SS_PIN, RST_PIN);

const char* ssid = "UIU-STUDENT";  //wifi name
const char* password = "12345678"; //wifi passoword
char server[] = "10.10.248.134";  // wifi's ip address


WiFiClient client;    


void setup()
{
  Serial.begin(9600);
  while (!Serial);

  SPI.begin();
  mfrc522.PCD_Init();
  Serial.print("Connecting to ");
  Serial.println(ssid);
 
  WiFi.begin(ssid, password);
 
  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }
  Serial.println("");
  Serial.println("WiFi connected");
  Serial.println("Server started");
  Serial.println(WiFi.localIP());
  delay(100);
  Serial.println("Start Scanning...");
 } 
void loop() {
  if (mfrc522.PICC_IsNewCardPresent() && mfrc522.PICC_ReadCardSerial()) {

    byte productID[4]; // declare a byte array to store the scanned ID
    for (byte i = 0; i < mfrc522.uid.size; i++) {
      productID[i] = mfrc522.uid.uidByte[i]; // store the scanned ID in the array
    }
    Serial.println();

    Sending_To_phpmyadmindatabase(productID); // call the function and pass the ID as a parameter

    mfrc522.PICC_HaltA();
    mfrc522.PCD_StopCrypto1();
  }
}
void Sending_To_phpmyadmindatabase(byte productID[]) {
  Serial.print("Scanned product ID: ");
  for (byte i = 0; i < 4; i++) {
    Serial.print(productID[i] < 0x10 ? " 0" : " ");
    Serial.print(productID[i], HEX);
  }
  Serial.println();

  if (client.connect(server, 80)) {
    String postData = "product_id=";
    postData += String(productID[0], HEX);
    postData += String(productID[1], HEX);
    postData += String(productID[2], HEX);
    postData += String(productID[3], HEX);
    
    client.println("POST http://localhost/%23micro_project/insert_data.php HTTP/1.1");
    client.println("Host: " + String(server));
    client.println("Content-Type: application/x-www-form-urlencoded");
    client.println("Content-Length: " + String(postData.length()));
    client.println();
    client.println(postData);

    while (client.connected() && !client.available()) {
      delay(1);
    }

    if (client.available()) {
      String response = client.readStringUntil('\r');
      Serial.println(response);
    }

    client.stop();

    Serial.println("Data sent to server.");
  } else {
    Serial.println("Connection to server failed.");
  }
}
