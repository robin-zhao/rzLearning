#!/usr/bin/env python3

from PIL import Image

img = Image.open('8939.jpg')

print(img.size)

# img.show()


# 43 crop an image.
area = (100, 100, 300, 375)

cropped = img.crop(area)
#cropped.show()


# 44 combine together

pic1 = Image.open('8939.jpg')
pic2 = Image.open('test2.jpg')

area = (0, 0, 218, 146)

pic1.paste(pic2, area)
#pic1.show()


# 45 Getting Individual Channels
print(pic1.mode)

r, g, b = pic1.split()

#r.show()
#g.show()
#b.show()

# 46 Awesome Merge Effect

newImage = Image.merge('RGB', (b, r, g))
#newImage.show()


img1 = Image.open('8939-2-0.jpg')
img2 = Image.open('8939-2-1.jpg')
r, g, b = img1.split()
r2, g2, b2 = img2.split()

newImage = Image.merge('RGB', (r, g2, b2))
newImage.show()