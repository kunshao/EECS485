#!/usr/bin/env python
# this file populates the load_data.sql with photos from the php/html/static/pictures

import os, sys
import datetime, time
from pymd5 import md5, padding

def album_id(prefix):
	return {
		'sports':1,
		'football':2,
		'world':3,
		'space':4
	}[prefix]


load_sql_f = open("test_load_data.sql","w")

photo_prefix = 'INSERT INTO  Photo ( picid, url, format, photodate )\nVALUES ('
photo_suffix = ');'

contain_prefix = 'INSERT INTO  Contain ( albumid, picid, caption, sequencenum )\nVALUES ('
contain_suffix = ');'

os.chdir('../html/static/pictures/')
pictures = os.listdir('.')

album_sizes = {
		'sports':0,
		'football':0,
		'world':0,
		'space':0
	}

for p in pictures:
	im_f = open(p)
	
	image_prefix = p.split('_')[0]
	image_caption = p.split('_')[1].split('.')[0]
	image_suffix = p.split('.')[1]
	image_datetime = datetime.datetime.strptime(time.ctime(os.path.getctime(p)), "%a %b %d %H:%M:%S %Y")
	image_picid = md5(p + str(image_datetime)).hexdigest()
	image_url = 'pictures/%s.%s' % (image_picid, image_suffix)

	add_image_cmd = photo_prefix + "'%s', '%s', '%s', '%s'" % \
			(image_picid, image_url, "jpg", image_datetime) \
					+ photo_suffix

	add_contain_cmd = contain_prefix + "'%s', '%s', '%s', '%s'" % \
			(album_id(image_prefix), image_picid, image_caption, album_sizes[image_prefix]) \
					+ contain_suffix
	album_sizes[image_prefix] += 1

	load_sql_f.write(add_image_cmd + os.linesep)
	load_sql_f.write(add_contain_cmd + os.linesep)
