from pprint import pprint
from nsetools import Nse
nse = Nse()
index_codes = nse.get_index_list()
pprint(index_codes)