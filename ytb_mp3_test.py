import requests

url = "https://coolguruji-youtube-to-mp3-download-v1.p.rapidapi.com/"

querystring = {"id":"lF-jPBnZ098,OmAlu5T44t8,GTJHrHHAElU"}

headers = {
    'x-rapidapi-key': "92eec4b87cmsh33deccbc86b657ep143926jsnbb70981d40ca",
    'x-rapidapi-host': "coolguruji-youtube-to-mp3-download-v1.p.rapidapi.com"
    }

response = requests.request("GET", url, headers=headers, params=querystring)

print(response.text)