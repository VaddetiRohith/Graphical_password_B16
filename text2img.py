from PIL import Image
from PIL import ImageDraw
from PIL import ImageFont
import sys
import random

def getSize(txt, font):
    testImg = Image.new('RGB', (1, 1))
    testDraw = ImageDraw.Draw(testImg)
    return testDraw.textsize(txt, font)

if __name__ == '__main__':

    fontname = "Arial.ttf"
    fontsize = 30   
    text = sys.argv[1]

    colorText = "black"
    colorBackground = "white"


    font = ImageFont.truetype(fontname, fontsize)
    width, height = getSize(text, font)
    img = Image.new('RGB', (200, 50), colorBackground)
    d = ImageDraw.Draw(img)
    d.text((20, 15), text, fill=colorText, font=font)

    x=random.randint(1,100);
    print x;    
    img.save("%s.png" %x)
