first = "<a href=\"img/"
second = ".jpg\" data-lightbox=\""
third = "\" title=\"My caption\"><img src=\"img/"
fourth = ".jpg\" alt=\"image\" style=\"width:100px;\"/></a>"

for i in range(1,23):
	num= str(i) if i>=10 else "0"+str(i)
	print first + num + second + num + third + num + "lowres" + fourth
