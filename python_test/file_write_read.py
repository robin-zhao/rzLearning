file = 'test-file.txt'
mode = 'w'

fileWriter = open(file, mode)
fileWriter.write('Hello World\n')
fileWriter.write('And Again\n')
fileWriter.close()


fileReader = open(file, 'r')
txt = fileReader.read()
fileReader.close()

print(txt)