import threading

class Messenger(threading.Thread):
    def run(self):
        for _ in range(10):
            print(threading.current_thread().getName())
            
            
            
o1 = Messenger(name = 'o1')
o2 = Messenger(name = 'o2')

o1.start()
o2.start()
