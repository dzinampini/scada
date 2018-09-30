#include <ESP8266WiFi.h>
#include <ESP8266HTTPClient.h>

const char* ssid = "dzinampini";
const char* password = "12331233";
void setup () {
//variables for chillers 

int c1, c2, c3, c4, c4, cs1, cs2, cs3, cs4; //cs -b chiller status and c for chiller value 

  Serial.begin(115200);
  WiFi.begin(ssid, password);

  while (WiFi.status() != WL_CONNECTED) {

    delay(1000);
    Serial.print("Connecting..");

  }

}

void loop() {
  

  if (WiFi.status() == WL_CONNECTED) { //Check WiFi connection status

    //put values here 
    c1 = ramdom(30, 80); 
    c2 = ramdom(30, 80);
    c3 = ramdom(30, 80);
    c4 = ramdom(30, 80); 
    cs1 = random(0, 1); 
    cs2 = random(0, 1); 
    cs3 = random(0, 1); 
    cs4 = random(0, 1); 

    String z1 = String(c1);
    String z2 = String(c2);
    String z3 = String(c3);
    String z4 = String(c4);
    String z5 = String(cs1);
    String z6 = String(cs2);
    String z8 = String(cs3);
    String z9 = String(cs4);
      

    HTTPClient http;  //Declare an object of class HTTPClient

    http.begin("http://dendairyscada.co.zw/ich.php?c1=" + z1 + "&c2=" + z2 + "&c3=" + z3 + "&c4=" + z4 + "&cs1=" + z5 + "&cs2=" + z6 + "&cs3=" + z7 + "&cs4 =" + z8);  //Specify request destination
    int httpCode = http.GET();                                                                  //Send the request
    http.end();   //Close connection
    
    //http.begin("http://mossopietas.co.zw/insert.php?firstname=888&lastname=" + de + "&email=&submit=Submit");  //Specify request destination
    //httpCode = http.GET();    
    //http.end();   //Close connection
  }

  delay(30000);    //Send a request every 30 seconds

}
