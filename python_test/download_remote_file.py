from urllib import request

url = 'http://everytimezone.com/'

def download_file(url):
    response = request.urlopen(url)
    decoded = response.read().decode(response.headers.get_content_charset())
    lines = str(decoded).split('\\n')
    
    
    file = open('test-file.html', 'w')
    
    for l in lines:
        print(l)
        file.write(l + "\n")
        
    file.close()
    
download_file(url)
