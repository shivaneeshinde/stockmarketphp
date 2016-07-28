from googlefinance import getQuotes
from googlefinance import getNews
import json
print json.dumps(getQuotes('hdfc'), indent=2)
#print json.dumps(getNews('hdfc'), indent=2)