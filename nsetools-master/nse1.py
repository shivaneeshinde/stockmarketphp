from nsetools import  Nse
nse = Nse()
from pprint import pprint
indices = nse.get_index_list()
pprint(indices)