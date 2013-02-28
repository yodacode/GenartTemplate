ArrayList titles;
boolean b = true;
color couleur;

void setup(){
  size(770,390);
  titles = new ArrayList();
      background(0,0,0);
  noLoop();
}

void draw(){ 

}

ArrayList addTitles(String t, int x, int y, String _couleur){
  if(b == true){
    couleur = _couleur;
    if(couleur == 'red'){
      background(255,0,0);
    }else if(couleur == 'green'){
      background(0,255,0);
    }else if(couleur == 'black'){
      background(0,0,0);
    }

    b = false;
  }
    TitleObject myTitle = new TitleObject(t,x,y);
    titles.add(myTitle);
    // return titles;
}

class TitleObject {
  int x,y;
  String t;
  TitleObject(String _t, int _x, int _y) { 
    t = _t; 
    x = _x;
    y = _y; 
    textFont('verdana', random(15,32));
    fill(random(0, 255),random(0, 255),random(0, 255));
    text(t, x, y);
  }
  void draw() {
    stroke(255,0,0);
    fill(255);
  } 
}