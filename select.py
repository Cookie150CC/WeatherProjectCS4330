import pymysql

db = pymysql.connect(host = 'localhost', user = 'weather', db = 'weather')

cursor = db.cursor()

def findMaxTemp():
    sql = "SELECT max(temperature.maxtemp) FROM STATION, TEMPERATURE\
            WHERE station.stationid = temperature.stationid"
    
    try:
        cursor.execute(sql)
        results = cursor.fetchall()
        print("Max Temperature is: %s" % (results[0]))
            
    except:
        print("Error: unable to fetch data")
        
def findMaxTempState(statid):
    sql = "SELECT max(temperature.maxtemp) FROM STATION, TEMPERATURE\
            WHERE station.stationid = temperature.stationid and station.state = '%s'"% (statid)
    
    try:
        cursor.execute(sql)
        results = cursor.fetchone()
        print("Max Temperature for %s is: %s" % (statid, results[0]))
            
    except:
        print("Error: unable to fetch data")
    

def findMinTemp():
    sql = "SELECT min(temperature.maxtemp) FROM STATION, TEMPERATURE\
            WHERE station.stationid = temperature.stationid"

    try:
        cursor.execute(sql)        
        results = cursor.fetchall()
        
        print("Min Temperature is: %s" % (results[0]))

    except:
        print("Error: unable to fetch data")

def findMinTempState(statid):
    sql = "SELECT min(temperature.maxtemp) FROM STATION, TEMPERATURE\
            WHERE station.stationid = temperature.stationid and station.state = '%s'"% (statid)
    
    try:
        cursor.execute(sql)
        results = cursor.fetchone()
        print("Min Temperature for %s is: %s" % (statid, results[0]))
            
    except:
        print("Error: unable to fetch data")
        
def findHottestDays():
    sql = "SELECT * FROM STATION, TEMPERATURE\
        WHERE station.stationid = temperature.stationid and\
            temperature.maxtemp >= 95"
            
    try:
        cursor.execute(sql)
        results = cursor.fetchall()
        for row in results:
            statid = row[0]
            name = row[1]
            state = row[2]
            date = row[7]
            temp = row[9]
            
            print("%s, %s, %s, %s, %s" % (statid, name, state, date, temp))
            
    except:
        print("Error: unable to fetch data")
            
        
def findColdestDays():
    sql = "SELECT * FROM STATION, TEMPERATURE\
        WHERE station.stationid = temperature.stationid and\
            temperature.maxtemp <= 0"
            
    try:
        cursor.execute(sql)
        results = cursor.fetchall()
        for row in results:
            statid = row[0]
            name = row[1]
            state = row[2]
            date = row[7]
            temp = row[10]
            
            print("%s, %s, %s, %s, %s" % (statid, name, state, date, temp))
            
    except:
        print("Error: unable to fetch data")

def findMaxAvgWind():
    sql = "SELECT max(wind.avgwindspd) FROM STATION, WIND\
        WHERE station.stationid = wind.stationid"
    
    try:
        cursor.execute(sql)        
        results = cursor.fetchall()
        
        print("Max Average Wind is: %s" % (results[0]))
            
    except:
        print("Error: unable to fetch data")

def findMaxSustainedWind():
    sql = "SELECT max(wind.fastest2min) FROM STATION, WIND\
            WHERE station.stationid = wind.stationid"
    
    try:
        cursor.execute(sql)        
        results = cursor.fetchall()
        
        print("Max Sustained Wind is: %s" % (results[0]))
            
    except:
        print("Error: unable to fetch data")

def findMaxWindGust():
    sql = "SELECT max(wind.fastest5sec) FROM STATION, WIND\
        WHERE station.stationid = wind.stationid"
    
    try:
        cursor.execute(sql)        
        results = cursor.fetchall()
        
        print("Max Average Gust is: %s" % (results[0]))
            
    except:
        print("Error: unable to fetch data")
        
def findStrongAvgWind():
    sql = "SELECT * FROM STATION, WIND WHERE station.stationid = wind.stationid and\
            wind.avgwindspd >15"
            
    try:
        cursor.execute(sql)
        results = cursor.fetchall()
        for row in results:
            statid = row[0]
            name = row[1]
            state = row[2]
            date = row[7]
            avgwind = row[8]
            
            print("%s, %s, %s, %s, %s" % (statid, name, state, date, avgwind))
            
    except:
        print("Error: unable to fetch data")
    
def findStrongAvgWindUser(wind):
    sql = ("SELECT * FROM STATION, WIND WHERE station.stationid = wind.stationid and\
           wind.avgwindspd >%d"% wind)
    

    try:
        cursor.execute(sql) 
        results = cursor.fetchall()
        for row in results:
            statid = row[0]
            name = row[1]
            state = row[2]
            date = row[7]
            avgwind = row[8]
            
            print("%s, %s, %s, %s, %s" % (statid, name, state, date, avgwind))
            
    except:
        print("Error: unable to fetch data")
        
def findMaxPrecip():
    sql = "SELECT max(precipitation.precip) FROM STATION, PRECIPITATION\
        WHERE station.stationid = precipitation.stationid"
    
    try:
        cursor.execute(sql)        
        results = cursor.fetchall()
        
        print("Max Precipitation is: %s" % (results[0]))
            
    except:
        print("Error: unable to fetch data")

def findMaxSnowfall():
    sql = "SELECT max(precipitation.snowfall) FROM STATION, PRECIPITATION\
        WHERE station.stationid = precipitation.stationid"
    
    try:
        cursor.execute(sql)        
        results = cursor.fetchall()
        
        print("Max Snowfall is: %s" % (results[0]))
            
    except:
        print("Error: unable to fetch data")

def findMaxSnowDepth():
    sql = "SELECT max(precipitation.snowdepth) FROM STATION, PRECIPITATION\
        WHERE station.stationid = precipitation.stationid"
    
    try:
        cursor.execute(sql)        
        results = cursor.fetchall()
        
        print("Max Snow Depth is: %s" % (results[0]))
            
    except:
        print("Error: unable to fetch data")

def findWeatherDay(statid, date):
    sql = "SELECT * FROM station, precipitation, wind, temperature\
    where temperature.StationID = station.StationID and temperature.StationID = wind.StationID and\
    temperature.StationID = precipitation.StationID and temperature.Date = wind.Date and\
    temperature.date = precipitation.date and temperature.date = '%s' and station.state = '%s'" % (date,statid)
    
    try:
        cursor.execute(sql)
        results = cursor.fetchall()      
        for row in results:
            statid = row[0]
            name = row[1]
            state = row[2]
            date = row[7]
            precip = row[8]
            snow = row[9]
            depth = row[10]
            avgwind = row[13]
            fast2min = row[14]
            fast5sec = row[15]
            peakgust = row[16]
            fastmilespd = row[17]
            avgtemp = row[20]
            maxtemp = row[21]
            mintemp = row[22]
            obstemp = row[23]
            
            print("%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s" %
                  (statid, name, state, date, 
                  avgtemp, maxtemp, mintemp, obstemp,
                  precip, snow, depth,
                  avgwind, fast2min, fast5sec, peakgust, fastmilespd))
            
    except:
        print("Error: unable to fetch data")

def findWeatherRange(statid, fromdate, todate):
    sql = "SELECT * FROM station, precipitation, wind, temperature\
    where temperature.StationID = station.StationID and temperature.StationID = wind.StationID and\
    temperature.StationID = precipitation.StationID and temperature.Date = wind.Date and\
    temperature.date = precipitation.date and temperature.date >= '%s' \
    and temperature.date <= '%s' and station.state = '%s'" % (fromdate, todate, statid)
    
    try:
        cursor.execute(sql)
        results = cursor.fetchall()      
        for row in results:
            statid = row[0]
            name = row[1]
            state = row[2]
            date = row[7]
            precip = row[8]
            snow = row[9]
            depth = row[10]
            avgwind = row[13]
            fast2min = row[14]
            fast5sec = row[15]
            peakgust = row[16]
            fastmilespd = row[17]
            avgtemp = row[20]
            maxtemp = row[21]
            mintemp = row[22]
            obstemp = row[23]
            
            print("%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s" %
                  (statid, name, state, date, 
                  avgtemp, maxtemp, mintemp, obstemp,
                  precip, snow, depth,
                  avgwind, fast2min, fast5sec, peakgust, fastmilespd))
            
    except:
        print("Error: unable to fetch data") 

def listStations():
    sql = "SELECT * FROM weather.station"
    
    try:
        cursor.execute(sql)
        results = cursor.fetchall()
        for row in results:
            statid = row[0]
            name = row[1]
            state = row[2]
            lat = row[3]
            long = row[4]
            elevation = row[5]
            print(statid, name, state, lat, long, elevation)
    
    except:
        print("Error: unable to fetch data") 
    
    
    

findHottestDays()
print()
findColdestDays()
print()
#findStrongAvgWindUser(15)
print()
listStations()
state = 'MI'
date = '2018-08-01'
todate = '2018-09-01'
#findWeatherRange(state, date, todate)
print()
findMinTempState(state)

db.close()