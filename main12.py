import requests
from bs4 import BeautifulSoup

url = input("Please Input Your URL: ")

response = requests.get(url)
soup = BeautifulSoup(response.text, "html.parser")

title = soup.title.string
print(f"Web Page Title: {title}")

headers = soup.find_all(['h1', 'h2', 'h3', 'h4', 'h5', 'h6'])

print("\nHeaders:")
for header in headers:
    print(header.get_text())   

meta_description = soup.find('meta', attrs={'name': 'description'})
if meta_description:
    print(f"\nMeta Description: {meta_description['content']}")
else:
    print("\nMeta Description: Not found")


meta_keywords = soup.find('meta', attrs={'name': 'keywords'})
if meta_keywords:
    print(f"Meta Keywords: {meta_keywords['content']}")
else:
    print("Meta Keywords: Not found")

images = soup.find_all("img", src=True)

print("\nImage URLs:")
for img in images:
    print(f"Image: {img['src']} - Alt: {img.get('alt', 'No Alt Text')}")

links = soup.find_all("a", href=True)

print("\nLinks:")
for link in links:
    print(f"Link: {link['href']} - Text: {link.text.strip()}")
