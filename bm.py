#!/usr/bin/python

import xmlrpclib
import json
import time
import sys

print sys.argv[1] # first parameter
print sys.argv[2] # second parameter

#######################################################
#    CONFIG VARIABLES
server_address="BM-bar"  
your_address="BM-foo"      
api = xmlrpclib.ServerProxy("http://api_user:api_password@127.0.0.1:8445/")
#######################################################
subject = sys.argv[1].encode('base64')
message = sys.argv[2].encode('base64')
ackData = api.sendMessage(your_address, server_address, subject,message)

