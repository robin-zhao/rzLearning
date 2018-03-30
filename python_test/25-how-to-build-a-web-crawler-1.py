from bs4 import BeautifulSoup
import requests

def trade_spider(max_pages):
    page = 1
    while page <= max_pages:
        url = 'https://blog.54zxy.com/page/' + str(page) + '/'
        source_code = requests.get(url)
        plain_text = source_code.text
        
        soup = BeautifulSoup(plain_text)
        for link in soup.findAll('a', {'rel': 'bookmark'}):
            href = link.get('href')
            print(href)
            
        page += 1
        
trade_spider(1)