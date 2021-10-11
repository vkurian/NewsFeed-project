from flask import Flask,render_template
from newsapi import NewsApiClient

app = Flask(__name__)

@app.route("/")
def home():
    api_key = '23b86c558a554eaca571a55802e63d6a'
    
    newsapi = NewsApiClient(api_key=api_key)

    top_headlines = newsapi.get_top_headlines(sources = "bbc-news"."Fox-News")
    all_articles = newsapi.get_everything(sources = "bbc-news","Fox-News")

    t_articles = top_headlines['articles']
    a_articles = all_articles['articles']

    news = []
    desc = []
    img = []
    p_date = []
    url = []

    for i in range (len(t_articles)):
        main_article = t_articles[i]

        news.append(main_article['title'])
        desc.append(main_article['description'])
        img.append(main_article['urlToImage'])
        p_date.append(main_article['publishedAt'])
        url.append(main_article['url'])

        contents = zip( news,desc,img,p_date,url)

    news_all = []
    desc_all = []
    img_all = []
    p_date_all = []   
    url_all = []

    for j in range(len(a_articles)): 
        main_all_articles = a_articles[j]   

        news_all.append(main_all_articles['title'])
        desc_all.append(main_all_articles['description'])
        img_all.append(main_all_articles['urlToImage'])
        p_date_all.append(main_all_articles['publishedAt'])
        url_all.append(main_article['url'])
        
        all = zip( news_all,desc_all,img_all,p_date_all,url_all)

    return render_template('home.html',contents=contents,all = all)


if __name__ == '__main__':
    app.run(debug=True)
