import urllib.request
import random

def download_image(url):
    filename = str(random.randrange(1, 10000)) + '.jpg'
    urllib.request.urlretrieve(url, filename)
   
url = 'https://blog.54zxy.com/wp-content/uploads/2017/12/terra-cotta-warriors.jpg' 
download_image(url) 
    