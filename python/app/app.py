from flask import Flask, request, jsonify
from dotenv import load_dotenv
from service.send_email import intialization_smtp_server

load_dotenv()
app = Flask(__name__)
@app.route('/send-email', methods=['POST'])
def send_email():
  data = request.json
  intialization_smtp_server(message=data['context'],subject=data['subject'],recevier_email=data['to'])
  return jsonify(f'<h1> envio de email para o {data.get('to')}</h1>')

if __name__ == '__main__':
  app.run(host='0.0.0.0', port=5000,debug=True)
