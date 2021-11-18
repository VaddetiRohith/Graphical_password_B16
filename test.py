from PIL import Image
import dhash;
o=Image.open('anki.png')
print(dhash(o));
