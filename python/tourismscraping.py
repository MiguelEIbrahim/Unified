import requests
from bs4 import BeautifulSoup
import firebase_admin
from firebase_admin import credentials
from firebase_admin import firestore

query = 'Touristic Sites in Lebanosn'
num_results = 10  # number of search results to retrieve

# Send a GET request to Google's search engine
url = f'https://www.google.com/search?q={query}&num={num_results}'
headers = {'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.3'}
response = requests.get(url, headers=headers)

# Parse the HTML response using BeautifulSoup
soup = BeautifulSoup(response.content, 'lxml')

# Locate the search results container
search_results = soup.find_all('div', class_='g')

# Extract the necessary data from each search result
urls = []
queries=[]
for result in search_results:
    # Extract the URL of the search result
    url = result.find('a')['href']
    # Check if the URL is a real link and add it to the list of URLs
    if url.startswith('http'):
        urls.append(url)
    
# Query each website and extract the last updated time
for url in urls:
    # Send a GET request to the website
    response = requests.get(url)
    
    # Parse the HTML response using BeautifulSoup
    soup = BeautifulSoup(response.content, 'lxml')
    
    # Locate the last updated time, if available
    time_tag = soup.find('time')
    if time_tag:
        last_updated_time = time_tag.text
        print(f'URL: {url}, Last Updated Time: {last_updated_time}')
        queries.append(last_updated_time)
    else:
        print(f'URL: {url}, Last Updated Time not found')


for i in range(queries):
    print(queries[i])#Debbugging Trials


