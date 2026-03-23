print("Jogo dos generos 😁")
genero = str(input("Informe o seu genero (M/F): "))
genero = genero.upper()

if (genero == "M" or genero == "F"):
    if (genero == "M"):
        print(f"Seu genero é Masculino")
    else:
        print("Seu genero é Feminino")
else:
    print("Genero invalido !!!")
    print("Informe com (M) para masculino ou (F) para feminino")
