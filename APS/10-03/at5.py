ano = int(input("Fale um ano para saber se é um ano bissexto: "))
if (ano%4 == 0 and ano%100!= 0) or (ano%400 == 0):
    print("Ano bissesto !!!")
else:
    print("Não é um ano bissexto !!!")
