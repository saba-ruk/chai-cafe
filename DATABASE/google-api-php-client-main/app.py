from flask import Flask, request, jsonify, render_template
import smtplib
from email.mime.text import MIMEText
from email.mime.multipart import MIMEMultipart

app = Flask(__name__)

# Email configuration (using Gmail as an example)
EMAIL_ADDRESS = 'sabaruknuddin12@gmail.com'
EMAIL_PASSWORD = 'Sabarukn123'

@app.route('/')
def index():
    return render_template('index1.php')

@app.route('/place_order', methods=['POST'])
def place_order():
    data = request.json
    name = data.get('name')
    email = data.get('email')
    order_details = data.get('order_details')

    # Create email
    msg = MIMEMultipart()
    msg['From'] = EMAIL_ADDRESS
    msg['To'] = email
    msg['Subject'] = 'Your Order Confirmation - Chai Cafe'
    
    body = f"Hello {name},\n\nThank you for your order at Chai Cafe!\n\nOrder Details:\n{order_details}\n\nBest Regards,\nChai Cafe Team"
    msg.attach(MIMEText(body, 'plain'))

    # Send email
    try:
        with smtplib.SMTP_SSL('smtp.gmail.com', 465) as server:
            server.login(EMAIL_ADDRESS, EMAIL_PASSWORD)
            server.send_message(msg)
        return jsonify({'status': 'success', 'message': 'Order placed and email sent successfully!'})
    except Exception as e:
        return jsonify({'status': 'error', 'message': str(e)})

if __name__ == '__main__':
    app.run(debug=True)