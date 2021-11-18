import mysql.connector
import sys
import base64
import os
from PIL import Image
from PIL import ImageDraw
from PIL import ImageFont
import hashlib
import random
import cStringIO


infile1 = Image.open(sys.argv[1])
x1=random.randint(1,900000);
infile1.save("%s.png" %x1)

def hash_file(filename):
   

   h = hashlib.sha256()

   
   with open(filename,'rb') as file:


	   chunk = 0
	   while chunk != b'':
		chunk = file.read(1024)
		h.update(chunk)


   return h.hexdigest()

message = hash_file("%s.png" %x1)

#print(message);


db = mysql.connector.connect(user='root', password='rohith25',
                              host='localhost',
                              database='signup')
cursor=db.cursor()

sql2 = 'select imageData from signupdb where user_img_hash = %(value)s';
params = {'value':message}
cursor.execute(sql2,params)
data=cursor.fetchall();
snoz = data[0][0];

data1=base64.b64decode(snoz)
file_like=cStringIO.StringIO(data1)
img1=Image.open(file_like)



infile1 = Image.open(sys.argv[1])
infile2 = Image.open(file_like)

outfile = Image.new('1', infile1.size)

for x in range(infile1.size[0]):
    for y in range(infile1.size[1]):
	outfile.putpixel((x, y), max(infile1.getpixel((x, y)), infile2.getpixel((x, y))))

outfile.show();
   

os.remove("%s.png" %x1);
