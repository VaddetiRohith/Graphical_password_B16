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

age = sys.argv[1];
gender = sys.argv[2];
country = sys.argv[3]; 
religion = sys.argv[4];
profession = sys.argv[5];


##################--country--#########################----8----#
a=random.choice(os.listdir("dataset/countries"));
b=random.choice(os.listdir("dataset/countries"));
c=random.choice(os.listdir("dataset/countries"));
d=random.choice(os.listdir("dataset/countries"));
e=random.choice(os.listdir("dataset/countries"));
f=random.choice(os.listdir("dataset/countries"));
g=random.choice(os.listdir("dataset/countries"));
h=random.choice(os.listdir("dataset/countries"));

while(a==country):
	a=random.choice(os.listdir("dataset/countries"));

while(b==country or b==a):
	b=random.choice(os.listdir("dataset/countries"));

while(c==country or c==b or c==a):
	c=random.choice(os.listdir("dataset/countries"));

while(d==country or d==a or d==b or d==c):
	d=random.choice(os.listdir("dataset/countries"));

while(e==country or e==a or e==b or e==c or e==d):
	e=random.choice(os.listdir("dataset/countries"));

while(f==country or f==a or f==b or f==c or f==d or f==e):
	f=random.choice(os.listdir("dataset/countries"));

while(g==country or g==a or g==b or g==c or g==d or g==e or g==f):
	g=random.choice(os.listdir("dataset/countries"));

while(h==country or h==a or h==b or h==c or h==d or h==e or h==f or h==g):
	h=random.choice(os.listdir("dataset/countries"));
	
i1="dataset/countries/%s/monuments"%a;
i2="dataset/countries/%s/monuments"%b;
i3="dataset/countries/%s/monuments"%c;
i4="dataset/countries/%s/faces"%d;
i5="dataset/countries/%s/dressing"%e;
i6="dataset/countries/%s/currency"%f;
i7="dataset/countries/%s/polititians"%g;
i8="dataset/countries/%s/polititians"%h;  #flag

i1=i1+"/"+random.choice(os.listdir("%s"%i1));
i2=i2+"/"+random.choice(os.listdir("%s"%i2));
i3=i3+"/"+random.choice(os.listdir("%s"%i3));
i4=i4+"/"+random.choice(os.listdir("%s"%i4));
i5=i5+"/"+random.choice(os.listdir("%s"%i5));
i6=i6+"/"+random.choice(os.listdir("%s"%i6));
i7=i7+"/"+random.choice(os.listdir("%s"%i7));
i8=i8+"/"+random.choice(os.listdir("%s"%i8));

##################--country--#########################----8----#

##################--religion--#########################----3----#

a=random.choice(os.listdir("dataset/religion"));
b=random.choice(os.listdir("dataset/religion"));
c=random.choice(os.listdir("dataset/religion"));

while(a==religion):
	a=random.choice(os.listdir("dataset/religion"));

while(b==religion or b==a):
	b=random.choice(os.listdir("dataset/religion"));

while(c==religion or c==b or c==a):
	c=random.choice(os.listdir("dataset/religion"));

i9="dataset/religion/%s/festivals"%a;
i10="dataset/religion/%s/god"%b;
i11="dataset/religion/%s/mythologicalsymbols"%c; 

i9=i9+"/"+random.choice(os.listdir("%s"%i9));
i10=i10+"/"+random.choice(os.listdir("%s"%i10));
i11=i11+"/"+random.choice(os.listdir("%s"%i11));

##################--religion--#########################----1----#

##################--profession--#########################----1----#
a=random.choice(os.listdir("dataset/profession"));

while(a==profession):
	a=random.choice(os.listdir("dataset/profession"));

i12="dataset/profession/%s"%a;
i12=i12+"/"+random.choice(os.listdir("%s"%i12));


##################--profession--#########################----1----#

##################--gender--#########################----3----#
a=random.choice(os.listdir("dataset/gender"));

while(a==gender):
	a=random.choice(os.listdir("dataset/gender"));

i13="dataset/gender/%s/a"%a;
i13=i13+"/"+random.choice(os.listdir("%s"%i13));

i14="dataset/gender/%s/b"%a;
i14=i14+"/"+random.choice(os.listdir("%s"%i14));

i15="dataset/gender/%s/c"%a;
i15=i15+"/"+random.choice(os.listdir("%s"%i15));

##################--gender--#########################----3----#


##################--animals--#########################----1----#
i16="dataset/animals/"+random.choice(os.listdir("dataset/animals"));


##################--animals--#########################----1----#


##################--food--#########################----1----#
i17="dataset/food/"+random.choice(os.listdir("dataset/food"));


##################--food--#########################----1----#

##################--emoji--#########################----1----#
i18="dataset/emoji/"+random.choice(os.listdir("dataset/emoji"));


##################--emoji--#########################----1----#


##################--traffic--#########################----1----#
i19="dataset/traffic/"+random.choice(os.listdir("dataset/traffic"));


##################--traffic--#########################----1----#

##################--sci_famous--#########################----1----#
i20="dataset/scientists/"+random.choice(os.listdir("dataset/scientists"));


##################--sci_famous--#########################----1----#

##################--abstract--#########################----1----#
i21="dataset/abstract/"+random.choice(os.listdir("dataset/abstract"));


##################--abstract--#########################----1----#

##################--age--#########################----3----#

a=random.choice(os.listdir("dataset/age"));
b=random.choice(os.listdir("dataset/age"));
c=random.choice(os.listdir("dataset/age"));

if(age>="10" and age<="15"):
	x="1015";
elif(age>="16" and age<="20"):
	x="1520";
elif(age>="21" and age<="30"):
	x="2030"; #----change----#
else:
	x="3050"; #----change lawer----#



while(a==x):
	a=random.choice(os.listdir("dataset/age"));

while(b==x or b==a):
	b=random.choice(os.listdir("dataset/age"));

while(c==x or c==b or c==a):
	c=random.choice(os.listdir("dataset/age"));

i22="dataset/age/%s/a"%a;
i23="dataset/age/%s/b"%b;
i24="dataset/age/%s/c"%c; 

i22=i22+"/"+random.choice(os.listdir("%s"%i22));
i23=i23+"/"+random.choice(os.listdir("%s"%i23));
i24=i24+"/"+random.choice(os.listdir("%s"%i24));

##################--age--#########################----3----#


##################--logos--#########################----1----#
i25="dataset/logos/"+random.choice(os.listdir("dataset/logos"));

##################--logos--#########################----1----#

print(i1+"----"+i2+"----"+i3+"----"+i4+"----"+i5+"----"+i6+"----"+i7+"----"+i8+"----"+i9+"----"+i10+"----"+i11+"----"+i12+"----"+i13+"----"+i14+"----"+i15+"----"+i16+"----"+i17+"----"+i18+"----"+i19+"----"+i20+"----"+i21+"----"+i22+"----"+i23+"----"+i24+"----"+i25+"----")
