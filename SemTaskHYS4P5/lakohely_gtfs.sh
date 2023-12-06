#!/bin/bash

if [ -f gtfs.zip ]; then
	rm gtfs.zip
fi

if [ -d gtfs ]; then
	rm -r gtfs
fi

wget "https://gtfsapi.mvkzrt.hu/gtfs/gtfs.zip"
unzip gtfs.zip -d gtfs

if [ -f gtfs/routes.txt ]; then
	cat gtfs/routes.txt | grep "Centrum"

else
	echo "Nem található."
fi

