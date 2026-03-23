import math
import time
import os

for t in range(100):
    os.system("cls" if os.name == "nt" else "clear")
    
    for y in range(-10, 10):
        for x in range(-30, 30):
            v = math.sin(x * 0.3 + t * 0.2) + math.cos(y * 0.3 + t * 0.2)
            
            if v > 1:
                print("*", end="")
            else:
                print(" ", end="")
        print()
    
    time.sleep(0.05)