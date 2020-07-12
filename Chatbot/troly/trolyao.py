import speech_recognition
import pyttsx3
from datetime import date
from datetime import datetime


# khởi tạo lên một biến để nghe
robot_ear = speech_recognition.Recognizer()
robot_mouth = pyttsx3.init()
robot_brain = ""


while True:
    with speech_recognition.Microphone() as mic:
        print("Robot: I'm Listening")
        audio = robot_ear.listen(mic)

    print("Robot: ...")

    try:
        you = robot_ear.recognize_google(audio)
    except:
        you = ""

    print("You: " + you)

    if  you =="":
        robot_brain ="i can't here you, try again"
    elif "hello" in you:
        robot_brain = "Hello My Friend, How are you today?"
    elif "fine" in you:
        robot_brain = "Good to heart that"
    elif "tired" in you:
        robot_brain = "hope you will be stronger!!!"
    elif "where" in you:
        robot_brain = "in Vietnam"
    elif "today" in you:
        today = date.today()
        robot_brain = today.strftime("%B %d, %Y")
    elif "Donald Trump" in you:
        robot_brain = "He is a President"
    elif "time" in you:
        now = datetime.now()
        robot_brain = now.strftime("%H hours %M minutes %S seconds")
    elif "bye" in you:
        robot_brain = "bye"
        print("Robot: " + robot_brain)
        robot_mouth.say(robot_brain)
        robot_mouth.runAndWait()
        break
    else:
        robot_brain = "i'm fine thank you and you"

    print("Robot: " + robot_brain)
    robot_mouth.say(robot_brain)
    robot_mouth.runAndWait()