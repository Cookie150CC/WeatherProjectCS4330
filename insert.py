import pymysql
import csv

db = pymysql.connect("localhost", "weather", "weather", "weather")

cursor = db.cursor()

def insertStation(stationid, name, state, lat, long, elev):
    insert = "INSERT INTO STATION(StationID, Name, State, Latitude, Longitude, Elevation)\
    VALUES(%s,%s, %s, %s, %s, %s)" % (stationid, name, state, lat, long, elev)
    
    try:
        cursor.execute(insert)
        db.commit()
    except:
        print('Failed')
        db.rollback()
        
def insertPrecip(stationid, date, precip, snow, snow_depth):
    insert = "INSERT INTO Precipitation(StationID, Date, Precip, Snowfall, SnowDepth)\
    VALUES(%s,%s, %s, %s, %s)" %(stationid, date, precip, snow, snow_depth)
    
    try:
        cursor.execute(insert)
        db.commit()
    except:
        print('Failed')
        db.rollback()
        
def insertTemp(stationid, date, AvgTemp, MaxTemp, MinTemp, ObsTemp):
    insert = "INSERT INTO Temperature(StationID, Date, AvgTemp, MaxTemp, MinTemp, ObsTemp)\
    VALUES(%s, %s, %s, %s, %s,%s)" % (stationid, date, AvgTemp, MaxTemp, MinTemp, ObsTemp)
    
    try:
        cursor.execute(insert)
        db.commit()
    except:
        print('Failed')
        db.rollback()

def insertWind(stationid, date, avgwind, fast2, fast5, peakgustspd, fastmilespd):
    insert = "INSERT INTO Wind(StationID, Date, AvgWindSpd, Fastest2Min, \
                Fastest5Sec, PeakGustSpd, FastestMileSpd)\
    VALUES(%s,%s, %s, %s, %s, %s, %s)" % (stationid, date,  avgwind, fast2, fast5, peakgustspd, fastmilespd)
    
    try:
        cursor.execute(insert)
        db.commit()
    except:
        print('Failed')
        db.rollback()
"""       
with open('Wind.csv') as csvfile:
    spamreader = csv.reader(csvfile)
    k = 1
    for row in spamreader:
        stationid = row[0]
        date = row[1]
        avgwind = row[2]
        fast2 = row[4]
        fast5 = row[5]
        peakgustspd = row[6]
        fastmilespd = row[7]
        print(k)
        insertWind(stationid, date, avgwind, fast2, fast5, peakgustspd, fastmilespd)
        k = k+1
    print('Finished')


with open('Temp.csv') as csvfile:
    spamreader = csv.reader(csvfile)
    k = 1
    for row in spamreader:
        stationid = row[0]
        date = row[1]
        avgtemp = row[2]
        maxtemp = row[3]
        mintemp = row[4]
        obstemp = row[5]
        if (k % 100 == 0):
            print(k)
        insertTemp(stationid, date, avgtemp, maxtemp, mintemp, obstemp)
        k = k+1
    print('Finished')  
    

with open('Precip.csv') as csvfile:
    spamreader = csv.reader(csvfile)
    k = 1
    for row in spamreader:
        stationid = row[0]
        date = row[1]
        precip = row[2]
        snow = row[3]
        snowdepth = row[4]
        if (k % 100 == 0):
            print(k)
        insertPrecip(stationid, date, precip, snow, snowdepth)
        k = k+1
    print('Finished')
   
    
csvfile.close"""

db.close