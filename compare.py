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
salt = b'This is the Key.'
bkey32 = salt.ljust(32)[:32]
tmp = AESCipher(bkey32);

db = mysql.connector.connect(user='root', password='rohith25',
                              host='localhost',
                              database='signup')

cursor=db.cursor();

message=sys.argv[5]


sql2 = "select pim1,pim2,pim3,pim4 from signupdb where user_img_hash = %s";
eid = (message,);
im1=sys.argv[1];
im2=sys.argv[2];
im3=sys.argv[3];
im4=sys.argv[4];

arr1 = [im1,im2,im3,im4];
arr1.sort();

cursor.execute(sql2,eid);
data=cursor.fetchall();
a1 = tmp.decrypt(data[0][0]);
a2 = tmp.decrypt(data[0][1]);
a3 = tmp.decrypt(data[0][2]);
a4 = tmp.decrypt(data[0][3]);

arr = [a1,a2,a3,a4];
arr.sort();
if ( arr1[0]==arr[0] and arr1[1]==arr[1] and arr1[2]==arr[2] and arr1[3]==arr[3]) :
	print "successful";
else :
	print "not successful"
db.close();
