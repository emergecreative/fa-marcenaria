import os

parent_dir = "E:/xampp/htdocs/fa-marcenaria/assets/img/clientes/"

clients = ["paraguacu", "totus", "senteq", "mrc", "conato", "zodio", "smartfit", "bioritmo", "viena", "brunella", "acai", "prada", "petz", "varandagriglia", "riachuelo", "microgym", "fitdance", "einstein", "tokstok", "embelleze"]

mode = 0o666

for client in clients:
    path = os.path.join(parent_dir,client)
    os.mkdir(path,mode)
    