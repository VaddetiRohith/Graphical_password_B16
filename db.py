import mysql.connector
import sys
import base64
import os
from PIL import Image
from PIL import ImageDraw
from PIL import ImageFont
import cStringIO
import random
import hashlib
from email.mime.multipart import MIMEMultipart
from email.mime.text import MIMEText  # Added
from email.mime.image import MIMEImage


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

    x0=random.randint(1,500000);
    img.save("%s.png" %x0)


   # print str

    #encoded_string = base64.b64encode(img)





image = Image.open("%s.png" %x0)
image = image.convert('1')

outfile1 = Image.new("1", [dimension * 2 for dimension in image.size])

outfile2 = Image.new("1", [dimension * 2 for dimension in image.size])

for x in range(0, image.size[0], 2):
    for y in range(0, image.size[1], 2):
        sourcepixel = image.getpixel((x, y))
        assert sourcepixel in (0, 255)
        coinflip = random.random()
        if sourcepixel == 0:
            if coinflip < .5:
                outfile1.putpixel((x * 2, y * 2), 255)
                outfile1.putpixel((x * 2 + 1, y * 2), 0)
                outfile1.putpixel((x * 2, y * 2 + 1), 0)
                outfile1.putpixel((x * 2 + 1, y * 2 + 1), 255)
                
                outfile2.putpixel((x * 2, y * 2), 0)
                outfile2.putpixel((x * 2 + 1, y * 2), 255)
                outfile2.putpixel((x * 2, y * 2 + 1), 255)
                outfile2.putpixel((x * 2 + 1, y * 2 + 1), 0)
            else:
                outfile1.putpixel((x * 2, y * 2), 0)
                outfile1.putpixel((x * 2 + 1, y * 2), 255)
                outfile1.putpixel((x * 2, y * 2 + 1), 255)
                outfile1.putpixel((x * 2 + 1, y * 2 + 1), 0)
                
                outfile2.putpixel((x * 2, y * 2), 255)
                outfile2.putpixel((x * 2 + 1, y * 2), 0)
                outfile2.putpixel((x * 2, y * 2 + 1), 0)
                outfile2.putpixel((x * 2 + 1, y * 2 + 1), 255)
        elif sourcepixel == 255:
            if coinflip < .5:
                outfile1.putpixel((x * 2, y * 2), 255)
                outfile1.putpixel((x * 2 + 1, y * 2), 0)
                outfile1.putpixel((x * 2, y * 2 + 1), 0)
                outfile1.putpixel((x * 2 + 1, y * 2 + 1), 255)
                
                outfile2.putpixel((x * 2, y * 2), 255)
                outfile2.putpixel((x * 2 + 1, y * 2), 0)
                outfile2.putpixel((x * 2, y * 2 + 1), 0)
                outfile2.putpixel((x * 2 + 1, y * 2 + 1), 255)
            else:
                outfile1.putpixel((x * 2, y * 2), 0)
                outfile1.putpixel((x * 2 + 1, y * 2), 255)
                outfile1.putpixel((x * 2, y * 2 + 1), 255)
                outfile1.putpixel((x * 2 + 1, y * 2 + 1), 0)
                
                outfile2.putpixel((x * 2, y * 2), 0)
                outfile2.putpixel((x * 2 + 1, y * 2), 255)
                outfile2.putpixel((x * 2, y * 2 + 1), 255)
                outfile2.putpixel((x * 2 + 1, y * 2 + 1), 0)

x1=random.randint(1,900000);
outfile1.save("%s.png" %x1)
x2=random.randint(1,900000);
outfile1.save("%s.png" %x2)

#//////////////////////////


def hash_file(filename):
   
   # make a hash object
   h = hashlib.sha256()

   # open file for reading in binary mode
   with open(filename,'rb') as file:

       # loop till the end of the file
       chunk = 0
       while chunk != b'':
           # read only 1024 bytes at a time
           chunk = file.read(1024)
           h.update(chunk)

   # return the hex representation of digest
   return h.hexdigest()

message = hash_file("%s.png" %x1)
#print(message)
#//////////////////////////

with open("%s.png" %x2, "rb") as imageFile:
    str = base64.b64encode(imageFile.read())




db = mysql.connector.connect(user='root', password='rohith25',
                              host='localhost',
                              database='signup')

cursor=db.cursor()

sql2 = 'select count(*) from signupdb';
cursor.execute(sql2)
data=cursor.fetchall();
snoz = data[0][0];
snoz = snoz+1;
print snoz;


emailid=sys.argv[2]
sql = 'INSERT INTO signupdb(sno,emailid,user_img_hash,imageData) VALUES(%s,%s,%s,%s)'    
args = ( snoz,emailid,message,str)

cursor.execute(sql,args)
db.commit()

sql1='select * from signupdb'
cursor.execute(sql1)
data=cursor.fetchall()
#print type(data[0][0])
snoz=snoz-1;
data1=base64.b64decode(data[snoz][3])
file_like=cStringIO.StringIO(data1)
img1=Image.open(file_like)
#img1.show()

db.close()




attachment = "%s.png" %x1;

msg = MIMEMultipart()
msg["To"] = "ankithavaddeti25@gmail.com"
msg["From"] = "ankitddeti@gmail.com"
msg["Subject"] = "subject"

msgText = MIMEText('<b>%s</b><br><img src="cid:%s"><br>' % ("body", attachment), 'html')  
msg.attach(msgText)   # Added, and edited the previous line

fp = open(attachment, 'rb')                                                    
imgq = MIMEImage(fp.read())
fp.close()
imgq.add_header('Content-ID', '<{}>'.format(attachment))
msg.attach(imgq)


os.remove("%s.png" %x0)
os.remove("%s.png" %x1)
os.remove("%s.png" %x2)

