import smtplib

FROM = "prod.sitema@gmail.com"
#TO = recipient if isinstance(recipient, list) else [recipient]
TO = ['goai901101@gmail.com']
SUBJECT = "intento 1 "
TEXT = 'Se anexa publicación '
# Prepare actual message
message = """From: Comite 
Subject: Convocatoria 

Se anexa publicacion de la convocatoria de becas escolares \n Cualquier duda comunicate a los telefonos \n 4422155283 y 4422426321 \n O acude a las instalaciones de la caja.
"""
try:
    server = smtplib.SMTP("smtp.gmail.com", 587)
    server.ehlo()
    server.starttls()
    server.login("prod.sitema@gmail.com", "Servicio.medico")
    server.sendmail(FROM, TO, message)
    server.close()
    print('successfully sent the mail')
except:
    print("failed to send mail")