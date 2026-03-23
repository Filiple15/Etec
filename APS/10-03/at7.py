dia = int(input("Informe um dia de 1 a 7: "))

while True:
    if (dia < 8 and dia > 0):
        print("Seu dia da semana é:")
        if (dia == 1):
            print("Hoje é (DOMINGO) !!!")
        elif (dia == 2):
            print("Hoje é (SEGUNDA) !!!")
        elif (dia == 3):
            print("Hoje é (TERÇA) !!!")
        elif (dia == 4):
            print("Hoje é (QUARTA) !!!")
        elif (dia == 5):
            print("Hoje é (QUINTA) !!!")
        elif (dia == 6):
            print("Hoje é (SEXTA) !!!")
        else:
            print("Hoje é (SABADO) !!!")
        break
    else:
        print("É um dia entre 1 a 7 !!!")
        dia = int(input("Informe um dia de 1 a 7 😒: "))