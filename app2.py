from flask import Flask, send_from_directory, make_response, abort, redirect, url_for, request, render_template, g
import os
import _sqlite3
app = Flask(__name__);
app.debug = True

@app.route('/')
def send_static():
    return app.send_static_file('login.html')

@app.route('/error')
@app.route('/errors')
def error():
    response = make_response('Oops, something went wrong!', 404)
    return response

@app.route('/unexpected')
def unexpected():
    abort(404)
    return True

@app.route('/<path:path>')
def send_static2(path):
    return send_from_directory('static', path)


# DATABASE = 'database_final.db'

def connect_to_database():
    
    db = _sqlite3.connect('database_final.db')
    
    with db:
        db.execute('CREATE TABLE if not exists messages(pkey integer primary key, name,surname,email,phone,message)')
    return db

def get_db():
    db = getattr(g, '_database', None)
    if db is None:
        db = g._database = connect_to_database()
    return db
    
@app.teardown_appcontext
def close_connection(exception):
    db = getattr(g, '_database', None)
    if db is not None:
        db.close()

@app.route('/contact.html', methods=['GET', 'POST'])
def Contact():
    
    if request.method == 'GET':
        return render_template('/contact.html')

    name = request.form['form_name']
    surname = request.form['form_lastname']
    email = request.form['form_email']
    phone = request.form['form_phone']
    message = request.form['form_message']
    

    db = get_db()
    
    with db:
        db.execute('INSERT INTO messages(name, surname, email, phone, message)VALUES(?,?,?,?,?)', (name,surname,email,phone,message))

    return redirect('/thankyou.html')




if __name__ == '__main__':
    app.run(port=8080, host='0.0.0.0', debug=True)