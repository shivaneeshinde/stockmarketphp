from pprint import pprint
from nsetools import Nse
nse = Nse()
top_gainers = nse.get_top_gainers()
pprint(top_gainers)
top_losers = nse.get_top_losers()
pprint(top_losers)