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



emailid=sys.argv[1];
result = hashlib.sha256(emailid.encode());
op=result.hexdigest();



db = mysql.connector.connect(user='root', password='rohith25',host='localhost', database='signup')

cursor=db.cursor()

sql2 = "select count(*) from signupdb where emailid = %s";

args = (op,);
cursor.execute(sql2,args);

data=cursor.fetchall();
snoz = data[0][0];

db.commit()

print(snoz);
