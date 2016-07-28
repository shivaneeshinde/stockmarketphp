from nsetools import Nse
from pprint import pprint
nse = Nse()
all_stock_codes = nse.get_stock_codes()
pprint(all_stock_codes)

for x in all_stock_codes:
 pprint(nse.get_quote(x))