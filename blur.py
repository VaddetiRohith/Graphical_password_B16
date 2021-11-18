import cv2
import sys


str2=sys.argv[1];



img = cv2.imread(str2);

blurImg = cv2.blur(img,(30,30))
imS = cv2.resize(blurImg, (250, 250)) 

cv2.imshow('blurred image',imS)

cv2.waitKey(0)
cv2.destroyAllWindows()
