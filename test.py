#test.py
from flask import Flask
app = Flask(__name__)

@app.route("/")
def hi():
	return "this is test"


if __name__=="__main__":
	app.run()

