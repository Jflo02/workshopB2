from PIL import Image
import pymysql.cursors  
import os
import sys


print(sys.argv[1])
# Connectez- vous à la base de données.
connection = pymysql.connect(host='127.0.0.1',
                             user='root',
                             password='',                             
                             db='workshopb2',
                             charset='utf8mb4',
                             cursorclass=pymysql.cursors.DictCursor)


tab = []

with connection.cursor() as cursor:
    sql ="SELECT position FROM `but` WHERE markedBy="+sys.argv[1]
    cursor.execute(sql)
    pos = cursor.fetchone()
    pos = pos['position'].split(", ")
    tabx = pos[0].split(".")

    x= int(tabx[0])
    taby = pos[1].split(".")
    y= int(taby[0]) 
    tabxy = [x,y]

    tab.append(tabxy)

img = Image.open("./image/ballebaby.png")

i=0
for coord in tab:

    x = tab[i][0]
    y = tab[i][1]
    

    for j in range (-10,11):
        for k in range (-10,11):
            img.putpixel((x+j,y+k),(250,0,0))
    i=i+1


if os.path.exists("./image/ballebaby"+sys.argv[1]+".png") == True:
    os.remove("./image/ballebaby"+sys.argv[1]+".png")
    img.save("./image/ballebaby"+sys.argv[1]+".png")
else:
    img.save("./image/ballebaby"+sys.argv[1]+".png")

connection.close()