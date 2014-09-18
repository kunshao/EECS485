#!/usr/bin/env python
# this file populates the load_data.sql with photos from the php/html/static/pictures

from PIL import Image
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
photo_suffix = ')'

contain_prefix = 'INSERT INTO  Contain ( albumid, picid, caption )\nVALUES ('
contain_suffix = ')'

os.chdir('../html/static/pictures/')
pictures = os.listdir('.')

for p in pictures:
	im = Image.open(p)
	im_f = open(p)
	
	image_prefix = p.split('_')[0]
	image_caption = p.split('_')[1].split('.')[0]
	image_date = datetime.datetime.strptime(time.ctime(os.path.getctime(p)), "%a %b %d %H:%M:%S %Y")
	image_picid = md5(p + 'secret').hexdigest()
	image_url = '/static/pictures/%s' % p

	add_image_cmd = photo_prefix + "'%s', '%s', '%s', '%s'" % \
			(image_picid, image_url, im.format, image_date) \
					+ photo_suffix

	add_contain_cmd = contain_prefix + "'%s', '%s', '%s'" % \
			(album_id(image_prefix), image_picid, image_caption) \
					+ contain_suffix

	load_sql_f.write(add_image_cmd + os.linesep)
	load_sql_f.write(add_contain_cmd + os.linesep)
