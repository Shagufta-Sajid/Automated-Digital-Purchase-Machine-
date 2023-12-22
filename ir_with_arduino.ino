int irSensorPin = 2;

int outputPin = 3;

void setup() {
  Serial.begin(9600);
   
  pinMode(irSensorPin, INPUT);
  
  pinMode(outputPin, OUTPUT);
}

void loop() {
 
  int irSensorValue = digitalRead(irSensorPin);
  
  Serial.println(irSensorValue);
  
  if (irSensorValue == 0) {
    digitalWrite(outputPin, LOW);
    delay(1000);
    
  } else {
    digitalWrite(outputPin, HIGH);
    delay(2000);
    
  }  
}
