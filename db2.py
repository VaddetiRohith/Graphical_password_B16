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
import smtplib
from email.mime.multipart import MIMEMultipart
from email.mime.text import MIMEText  # Added
from email.mime.image import MIMEImage
from aes import AESCipher
import cv2
import matplotlib
import scipy.misc
from aes import AESCipher


salt = b'This is the Key.'
bkey32 = salt.ljust(32)[:32]
tmp = AESCipher(bkey32);



def getSize(txt, font):
    testImg = Image.new('RGB', (1, 1))
    testDraw = ImageDraw.Draw(testImg)
    return testDraw.textsize(txt, font)

if __name__ == '__main__':

    fontname = "LiberationMono-Bold.ttf"
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

x1=random.randint(500000,900000);
outfile1.save("%s.png" %x1)
x2=random.randint(900000,1500000);
outfile2.save("%s.png" %x2)

#//////////////////////////


def hash_file(filename):
   

   h = hashlib.sha256()


   with open(filename,'rb') as file:


       chunk = 0
       while chunk != b'':

           chunk = file.read(1024)
           h.update(chunk)


   return h.hexdigest()
#print(x1)
message1 = hash_file("%s.png" %x1)
#print(message1)
#print(x2)
message = hash_file("%s.png" %x2)
#print(message)
#//////////////////////////

with open("%s.png" %x2, "rb") as imageFile:
    str = base64.b64encode(imageFile.read())

#print(x1);
#print(x2);


db = mysql.connector.connect(user='root', password='rohith25',host='localhost', database='signup')

cursor=db.cursor()

sql2 = 'select count(*) from signupdb';
cursor.execute(sql2)
data=cursor.fetchall();
snoz = data[0][0];
snoz = snoz+1;
#print snoz;


emailid=sys.argv[2]
sql = 'INSERT INTO signupdb(sno,emailid,user_img_hash,imageData,pim1,pim2,pim3,pim4,age,gender,country,religion,profession) VALUES(%s,%s,%s,%s,-1,-2,-3,-4,%s,%s,%s,%s,%s)'    



result = hashlib.sha256(emailid.encode()) 
age=sys.argv[3]
gender=sys.argv[4]
country=sys.argv[5]
religion=sys.argv[6]
profession=sys.argv[7]

ae = tmp.encrypt(age);
ge = tmp.encrypt(gender);
ce = tmp.encrypt(country);
re = tmp.encrypt(religion);
pe = tmp.encrypt(profession);


args = ( snoz,result.hexdigest(),message1,str,ae,ge,ce,re,pe)



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
msg["To"] = emailid;
msg["From"] = "graphicalauthentication123@gmail.com"
msg["Subject"] = "graphical authentication"

msgText = MIMEText('<b>%s</b><br><img src="cid:%s"><br>' % ("your share for authentication", attachment), 'html')  
msg.attach(msgText)   

fp = open(attachment, 'rb')                                                    
imgq = MIMEImage(fp.read())
fp.close()
msg.attach(imgq)


email1 = smtplib.SMTP('smtp.gmail.com',587)
email1.starttls();
email1.login("graphicalauthentication123@gmail.com", "Password@123")
email1.sendmail("graphicalauthentication123@gmail.com", emailid,msg.as_string());
email1.quit()




os.remove("%s.png" %x0)
os.remove("%s.png" %x1)
os.remove("%s.png" %x2)

