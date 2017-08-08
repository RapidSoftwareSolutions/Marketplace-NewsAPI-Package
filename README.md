[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/NewsAPI/functions?utm_source=RapidAPIGitHub_NewsAPIFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)
# NewsAPI Package
News API is a simple and easy-to-use API that returns JSON metadata for the headlines currently published on a range of news sources and blogs.
* Domain: [newsapi.org](https://newsapi.org)
* Credentials: apiKey
 
## Custom datatypes: 
 |Datatype|Description|Example
 |--------|-----------|----------
 |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
 |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
 |List|Simple array|```["123", "sample"]``` 
 |Select|String with predefined values|```sample```
 |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ```
## How to get credentials: 
1. Register on [newsapi.org](https://newsapi.org).
2. After creation your account you will see api Key. 
 
## NewsAPI.getArticles
Provides a list of live article metadata from a news source or blog.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| API key.
| newsSource| String     | The identifer for the news source or blog you want headlines from. Use the getArticles endpoint to locate this.
| typeOfList| Select     | Specify which type of list you want.Note: not all options are available for all sources.

## NewsAPI.getSources
Provides a list of the news sources and blogs available on News API.

| Field       | Type  | Description
|-------------|-------|----------
| category    | Select| The category you would like to get sources for.Default: empty (all sources returned).
| languageCode| Select| Code of the language you would like to get sources for.Default: empty (all sources returned).
| countryCode | Select| Code of the country you would like to get sources for.Default: empty (all sources returned).

