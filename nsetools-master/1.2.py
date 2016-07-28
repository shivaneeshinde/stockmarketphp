from math import *
b=(3*5)/(2+3)
print b
a=(sqrt(7+9))*2
print "Answer of given expression is:"
print a

c=nse.get_quote(‘infy’, as_json=True)
print c

index_codes = nse.get_index_list()
pprint(index_codes)



