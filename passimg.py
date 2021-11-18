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
from aes import AESCipher
salt = b'This is the Key.'
bkey32 = salt.ljust(32)[:32]
tmp = AESCipher(bkey32);

#####################----------find image hash

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
#####################----------find image hash



#emailid=sys.argv[1]
#result = hashlib.sha256(emailid.encode()) 

db = mysql.connector.connect(user='root', password='rohith25',
                              host='localhost',
                              database='signup')
cursor=db.cursor()

sql2 = 'select pim1,pim2,pim3,pim4,age,gender,country,religion,profession,rept1,rept2,rept3,rept4 from signupdb where user_img_hash = %s';
params = (message,);

cursor.execute(sql2,params)
data=cursor.fetchall();
a1 = tmp.decrypt(data[0][0]);
a2 = tmp.decrypt(data[0][1]);
a3 = tmp.decrypt(data[0][2]);
a4 = tmp.decrypt(data[0][3]);
a11= tmp.decrypt(data[0][4]);
a22= tmp.decrypt(data[0][5]);
a33= tmp.decrypt(data[0][6]);
a44= tmp.decrypt(data[0][7]);
a55= tmp.decrypt(data[0][8]);
rt1= tmp.decrypt(data[0][9]);
rt2= tmp.decrypt(data[0][10]);
rt3= tmp.decrypt(data[0][11]);
rt4= tmp.decrypt(data[0][12]);

os.remove("%s.png" %x1);

a5=a1+"_"+a2+"_"+a3+"_"+a4+"_"+a11+"_"+a22+"_"+a33+"_"+a44+"_"+a55+"_"+message+"_"+rt1+"_"+rt2+"_"+rt3+"_"+rt4;
print a5;
