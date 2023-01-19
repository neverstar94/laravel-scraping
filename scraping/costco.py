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


userdata_path = "C:\\Users\\Administrator\\AppData\\Local\\Google\\Chrome\\User Data"
options = webdriver.ChromeOptions() 
options.add_argument("user-data-dir={}".format(userdata_path))
driver = webdriver.Chrome(executable_path="chromedriver", chrome_options=options)
driver.get("https://costco.com/")


def main():
	flag = 0
	mycursor = connection.cursor(buffered=True)
	mycursor.execute("SELECT * FROM siteinfos WHERE url = 'Costco'")
	result = mycursor.fetchall()
	for key in result:
		flag = flag + 1
		userid = str(key[1])
		useremail = key[3]
		userpassword = key[4]
		test_chrome(userid,useremail,userpassword,flag)



def test_chrome(userid,useremail,userpassword,flag):
	
	cookies = [{'domain': '.costco.com', 'expiry': 1777800145, 'httpOnly': False, 'name': 'bm_sv', 'path': '/', 'secure': True, 'value': 'F3138AB071A4335F77332CB202056D8D~YAAQNop4aDAWPqaFAQAAwPoWthJv7RWSm/1tAP7Mg2yaQH77Lkba8sOnYqhkD48OXeLiRmCbBWd6FCbnOcnfue74gs4zpVPkU46DkR4TB7n3DzV5Fmm/H976GPiyVOAczZ/MIP/hl87TifePwELZi6PvravARbXvRAm42oMIJP6fKhVTXepC79frV2me2RmVUW0fnf7DBRGxgCeOGf1BsFkIDRcMR6rPKDeSrLiRmETHjtpiEFNq0b13iSDioZgNPsY=~1'}, {'domain': '.costco.com', 'expiry': 1777900143, 'httpOnly': True, 'name': 'ak_bmsc', 'path': '/', 'secure': False, 'value': 'EB87942FA73256BAC577733A20E92286~000000000000000000000000000000~YAAQtvo7FyQZjq+FAQAAR43VtRKtqV356KMXw62xd0+C1LWYSs8JjlaU2GiGmkMdYtWf/LvMmt0NgmzpVIxsfzhQ9HpzDIfusmrufm05UWsiqRFbXYOrwWPHuHHH2g08Dab77MjxVnjdPRuMVZWd76myJrsv1WnCqddTebENB5K7V11XFHZvoyj1k0rxbFbbaepcGCE9pcN0tRWGH4JjPn0dD5ZFrqRntD5AYXSK9YbN0lcv3vLc8JS+SzBxEDLvPLk/iBTMaBsRaEwgNUVe4vFWr8Hkc9ZNEUJkUA3jZxPTxJ38DRqF09E3maCU0vP/zyHlbd+6k34uXBrM0fPh4iCXDuImZckDzXxRUXZAVu0MBzAlhBl1g4i4Ot/p1r/Qdth7izS1kktJq8bUGQzq05PyeCO4cKRa00I1aZGhkx+ib4Zqpgn67bfWsByknzk8y5TQXovLcfWn3Hp+W2/No9QBxwGO+N4Lt3/RzJ7TJvr0U2b7emhpAsblrEiiwfec2gE97nuRk/2Lnky13wsYoqueMxK4PMU='}, {'domain': '.costco.com', 'httpOnly': False, 'name': 'AMCVS_97B21CFE5329614E0A490D45%40AdobeOrg', 'path': '/', 'secure': False, 'value': '1'}, {'domain': '.costco.com', 'expiry': 1779800147, 'httpOnly': True, 'name': 'AKA_A2', 'path': '/', 'secure': True, 'value': 'A'}, {'domain': '.costco.com', 'expiry': 1777800144, 'httpOnly': False, 'name': 'bm_mi', 'path': '/', 'secure': True, 'value': 'E4599AA14E5159C730E9502FDFF1EF1B~YAAQtvo7F8IYjq+FAQAAG4DVtRKz4jTrq56XpTXsUHmHg/yz59y3jKBVh07lXEr2UZPWd1tr/CIaoIYLQPb/4cRHD3x+jvL9hbbK8aTp5NwpvAJzAN2SZ3VJQgo3oj7FIpnOYvZ3vFiAxGOhBLrr7I1wQrKAgVSbe/tfQSgnC0ChYXAZ/775znezd7oi6Jwr1JWx5Mjd9YkB5H9DrzyU8tzkt9Ts774JCxvs/LCfaAXS2ap13StEN6hUAclM4Ksu7JKMmqIx4qBER9WMUmyQzXrfZlyDPaTrTbDZvIQsyNahBXo0mPr7k2xYRa600lB7mwn8rkyhBnY6XQcNNg/bFOJkWcud~1'}]
	time.sleep(6)

	
	
	# for cookie in cookies:
	# 	if 'expiry' in cookies:
	# 		# del cookie['expiry']
	# 		print(cookie['expiry'],'+++++++')
	# print(driver.get_cookies(),'7777777777777777777777777777')
	# driver.delete_all_cookies()
	# print(driver.get_cookies(),'88888888888888888888888888888')
	# driver.get("https://costco.com/")
	# time.sleep(5)
	# for cookie in cookies:
	# 	driver.add_cookie(cookie)
	# print(driver.get_cookies(),'3333333333333333333333333333')
	
	# # aaa = input("????")
	# # time.sleep(2)
	# # driver.get("https://costco.com/")
	print('_____________________________________________________________________________')
	print(driver.get_cookies())
	print('_____________________________________________________________________________')
	# time.sleep(8)

	signin = driver.find_element(By.ID, "header_sign_in")
	signin.click()
	time.sleep(5)

	username = driver.find_element(By.ID, "signInName")
	password = driver.find_element(By.ID, "password")
	login = driver.find_element(By.ID, "next")
	username.send_keys(useremail)
	password.send_keys(userpassword)
	login.click()
	time.sleep(10)
	
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
	orderlist_1 = []
	orderlist = []
	for c in b.findAll('tr', attrs={'class':'MuiTableRow-root css-ufft4h'}):
		if len(c) > 3:
			d = c.findAll('td') 
			e = d[2].find('div').text
			print(d[1],'+++++++++++++++++')
			# e_1 = d[1].find('div').text
			if e is not None:			
				orderlist.append(e)
			# if e_1 is not None:
			# 	orderlist_1.append(e_1)
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
			orderitem = orderitem +'+'+ orderlist_1[temp-1] +' ' + item

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

	time.sleep(10)
	driver.get("https://costco.com/")
	time.sleep(5)
	if flag == 2:
		print('++++++++++++++++++++++++++++++++++++++======================================')
		for cookie in cookies:
			driver.add_cookie(cookie)
	

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