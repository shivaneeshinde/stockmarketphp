from pprint import pprint
from nsetools import Nse
nse = Nse()
nifty_quote = nse.get_index_quote('cnx nifty')
pprint(nifty_quote)
