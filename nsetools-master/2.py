from pprint import pprint
import json
from nsetools import Nse
nse = Nse()
q = nse.get_quote('infy') 
#pprint(q)
dict={}

dict['applicableMargin']=q['applicableMargin']
dict['averagePrice']=q['averagePrice']
dict['bcEndDate']=q['bcEndDate']
dict['bcStartDate']=q['bcStartDate']


print dict

