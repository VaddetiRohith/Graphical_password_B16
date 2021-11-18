import mysql.connector
import sys
import base64
import os
import cv2
import random
import matplotlib
import scipy.misc
from aes import AESCipher
import hashlib
import random

salt = b'This is the Key.'
bkey32 = salt.ljust(32)[:32]
tmp = AESCipher(bkey32);


db = mysql.connector.connect(user='root', password='rohith25',
                              host='localhost',
                              database='signup')

cursor=db.cursor();
result = hashlib.sha256(sys.argv[1].encode()) 

sql2 = "select pim1,pim2,pim3,pim4 from signupdb where emailid = %s";
eid = (result.hexdigest(),);
cursor.execute(sql2,eid);
data=cursor.fetchall();
a1 = data[0][0];

a2 = data[0][1];

a3 = data[0][2];

a4 = data[0][3];


result = hashlib.sha256(sys.argv[1].encode()) 
pime1=tmp.encrypt("images/"+sys.argv[2]);

if a1 == "-1" :
	sql3 = "update signupdb set pim1= %s where emailid = %s";
	arg1 = (pime1,result.hexdigest(),);
	cursor.execute(sql3,arg1);
	db.commit();
elif a2 == "-2": 
	sql4 = "update signupdb set pim2= %s where emailid = %s";
	arg2 = (pime1,result.hexdigest(),);
	cursor.execute(sql4,arg2);
	db.commit();
elif a3 == "-3": 
	sql5 = "update signupdb set pim3= %s where emailid = %s";
	arg3 = (pime1,result.hexdigest(),);
	cursor.execute(sql5,arg3);
	db.commit();
elif a4 == "-4": 
	sql6 = "update signupdb set pim4= %s where emailid = %s";
	arg4 = (pime1,result.hexdigest(),);
	cursor.execute(sql6,arg4);
	db.commit();
	sql7 = "select pim1,pim2,pim3,pim4 from signupdb where emailid = %s";
	arg5 = (result.hexdigest(),);
	cursor.execute(sql7,arg5);
	data=cursor.fetchall();
	piga = tmp.decrypt(data[0][0]);
	pigb = tmp.decrypt(data[0][1]);
	pigc = tmp.decrypt(data[0][2]);
	pigd = tmp.decrypt(data[0][3]);
	rept = [piga,pigb,pigc,pigd];
	r = ["dataset/abstract","dataset/age/1015/a","dataset/age/1520/a","dataset/age/3050/a","dataset/animals","dataset/countries/china/currency","dataset/countries/china/dressing","dataset/countries/china/faces","dataset/countries/china/monuments","dataset/countries/china/polititians","dataset/countries/america/currency","dataset/countries/america/dressing","dataset/countries/america/faces","dataset/countries/america/monuments","dataset/countries/america/polititians","dataset/countries/australia/currency","dataset/countries/australia/dressing","dataset/countries/australia/faces","dataset/countries/australia/monuments","dataset/countries/australia/polititians","dataset/countries/brazil/currency","dataset/countries/brazil/dressing","dataset/countries/brazil/faces","dataset/countries/brazil/monuments","dataset/countries/brazil/polititians","dataset/countries/denmark/currency","dataset/countries/denmark/dressing","dataset/countries/denmark/faces","dataset/countries/denmark/monuments","dataset/countries/denmark/polititians","dataset/countries/india/currency","dataset/countries/india/dressing","dataset/countries/india/faces","dataset/countries/india/monuments","dataset/countries/india/polititians","dataset/countries/egypt/currency","dataset/countries/egypt/dressing","dataset/countries/egypt/faces","dataset/countries/egypt/monuments","dataset/countries/egypt/polititians","dataset/countries/japan/currency","dataset/countries/japan/dressing","dataset/countries/japan/faces","dataset/countries/japan/monuments","dataset/countries/japan/polititians","dataset/countries/malaysia/currency","dataset/countries/malaysia/dressing","dataset/countries/malaysia/faces","dataset/countries/malaysia/monuments","dataset/countries/malaysia/polititians","dataset/countries/russia/currency","dataset/countries/russia/dressing","dataset/countries/russia/faces","dataset/countries/russia/monuments","dataset/countries/russia/polititians","dataset/age/1015/b","dataset/age/1015/c","dataset/age/1520/b","dataset/age/1520/c","dataset/age/3050/b","dataset/age/3050/c","dataset/age/2030/a","dataset/age/2030/b","dataset/age/2030/c","dataset/emoji","dataset/food","dataset/gender/female/a","dataset/gender/female/b","dataset/gender/female/c","dataset/gender/male/a","dataset/gender/male/b","dataset/gender/male/c","dataset/logos","dataset/profession/doctor","dataset/profession/engineer","dataset/profession/lawer","dataset/profession/police","dataset/profession/student","dataset/profession/teacher","dataset/religion/budhism/mythologicalsymbols","dataset/religion/budhism/god","dataset/religion/budhism/festivals","dataset/religion/christian/mythologicalsymbols","dataset/religion/christian/god","dataset/religion/christian/festivals","dataset/religion/hindu/mythologicalsymbols","dataset/religion/hindu/god","dataset/religion/hindu/festivals","dataset/religion/sikhs/mythologicalsymbols","dataset/religion/sikhs/god","dataset/religion/sikhs/festivals","dataset/religion/islam/mythologicalsymbols","dataset/religion/islam/god","dataset/religion/islam/festivals","dataset/scientists","dataset/traffic"]
	cnt=0;
	while cnt!=4:
		x=random.randint(0,95)
		r1=r[x];
		r2=random.choice(os.listdir(r1));
		if r2 not in rept:
			cnt=cnt+1;
			rept.append(r1+"/"+r2);
		else:
			print "google";
	print(rept);
	print "stored";
	sql8 = "update signupdb set rept1=%s,rept2=%s,rept3=%s,rept4=%s where emailid = %s";
	rept11=tmp.encrypt("images/"+rept[4]);
	rept12=tmp.encrypt("images/"+rept[5]);
	rept13=tmp.encrypt("images/"+rept[6]);
	rept14=tmp.encrypt("images/"+rept[7]);
	arg6 = (rept11,rept12,rept13,rept14,result.hexdigest(),);
	cursor.execute(sql8,arg6);
	db.commit();
	
else:
	print("stored");

db.close();
