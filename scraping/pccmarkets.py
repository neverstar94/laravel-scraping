import unittest
import pickle
import os
from selenium import webdriver
import chromedriver_binary
from bs4 import BeautifulSoup
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.common.by import By
import time
import mysql.connector
from mysql.connector import Error

try:
    connection = mysql.connector.connect(host='localhost',
                                         database='sousapp',
                                         user='root',
                                         password='')
    if connection.is_connected():
        db_Info = connection.get_server_info()
        print("Connected to MySQL Server version ", db_Info)
        cursor = connection.cursor()
        cursor.execute("select database();")
        record = cursor.fetchone()
        print("You're connected to database: ", record)

except Error as e:
    print("Error while connecting to MySQL", e)


userdata_path = "C:\\Users\\Never\\AppData\\Local\\Google\\Chrome\\User Data\\Profile1"
options = webdriver.ChromeOptions() 
options.add_argument("user-data-dir={}".format(userdata_path))
driver = webdriver.Chrome(executable_path="chromedriver", options=options)
driver.get("https://www.pccmarkets.com/")


def main():
	mycursor = connection.cursor(buffered=True)
	mycursor.execute("SELECT * FROM siteinfos WHERE url = 'Pccmarkets'")
	result = mycursor.fetchall()
	for key in result:

		userid = str(key[1])
		useremail = key[3]
		userpassword = key[4]
		test_chrome(userid,useremail,userpassword)



def test_chrome(userid,useremail,userpassword):

	time.sleep(6)
	driver.get("https://www.pccmarkets.com/my-account/")

	time.sleep(5)

	username = driver.find_element(By.ID, "username")
	password = driver.find_element(By.ID, "password")
	login = driver.find_element(By.NAME, "login")
	username.send_keys(useremail)
	password.send_keys(userpassword)

	login.click()
	time.sleep(15)
	
	headerorder = driver.find_element(By.ID, "header_order_and_returns")
	headerorder.click()
	warehouseOrdersTab = driver.find_element(By.ID, "warehouseOrdersTab")
	warehouseOrdersTab.click()
	time.sleep(4)
	xpathvalue='/html/body/main/div/div[2]/div[7]/div/div[3]/div[3]/div[2]/div[1]/div/div[2]/button'
	receipt=driver.find_element(By.XPATH, xpathvalue)
	receipt.click()
	time.sleep(2)
	content = driver.page_source
	soup = BeautifulSoup(content,"html.parser")
	a = soup.find('table',attrs={'class':'MuiTable-root css-1yh78mg'})
	b = a.find('tbody',attrs={'class':'MuiTableBody-root css-1xnox0e'})
	orderlist = []
	for c in b.findAll('tr', attrs={'class':'MuiTableRow-root css-ufft4h'}):
		if len(c) > 3:
			d = c.findAll('td') 
			e = d[2].find('div').text
			if e is not None:			
				orderlist.append(e)
	f = soup.find('div',attrs={'class':'css-1wxplkz'})
	g = f.findAll('div',attrs={'class':'MuiBox-root css-gvoll6'})
	h = g[1].find('div')
	orderdate = ''
	orderdate = h.find('div',attrs={'class':'css-3jgw0r'}).text
	orderitem = ''
	temp = 0
	for item in orderlist:
		temp = temp + 1
		if len(orderlist)-2 > temp:
			orderitem = orderitem + '+' + item

	closebutton=driver.find_element(By.CSS_SELECTOR,'.css-1o7kmu8')
	closebutton.click()
	time.sleep(5) 
	# logobutton=driver.find_element(By.CSS_SELECTOR,'.logo-us')
	# logobutton.click()
	driver.get("https://costco.com/")
	time.sleep(7) 
	 # bc-logo logo-us
	accountbutton = driver.find_element(By.ID, "myaccount-react-d")
	accountbutton.click()
	time.sleep(10)
	# driver.delete_all_cookies()

	signout = driver.find_element(By.CSS_SELECTOR, ".css-1ljkbn6")
	signout.click()

	time.sleep(15)
	driver.get("https://costco.com/")

	

	mycursor = connection.cursor(buffered=True)
	mycursor.execute("SELECT * FROM orders WHERE user_id =  \"" + userid + "\" AND siteurl = 'Costco' AND scrapedate = \"" + orderdate + "\"")
	result = mycursor.fetchall()
	if len(result) != 0:
		print(result)
		sql = "UPDATE orders SET data = \"" + orderitem + "\" WHERE user_id =  \"" + userid + "\" AND siteurl = 'Costco' AND scrapedate = \"" + orderdate + "\""
		mycursor.execute(sql)
		connection.commit()
		print(mycursor.rowcount, "record(s) affected")
	else:
		sql = "INSERT INTO orders (user_id, siteurl, scrapedate, data) VALUES (%s, %s, %s, %s)"
		val = (userid, 'Costco', orderdate, orderitem)
		result = mycursor.execute(sql, val)
		print(result)
		connection.commit()


	# aaa = input("????")


if __name__ == "__main__":
    #unittest.main()
	while True:
		main()