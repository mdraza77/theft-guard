import cv2
from api_client import send_alert
import time

last_alert_time = 0

current_time = time.time()

cap = cv2.VideoCapture(0)

ret, frame1 = cap.read()
ret, frame2 = cap.read()

while True:

    diff = cv2.absdiff(frame1, frame2)

    gray = cv2.cvtColor(
        diff,
        cv2.COLOR_BGR2GRAY
    )

    blur = cv2.GaussianBlur(
        gray,
        (5, 5),
        0
    )

    _, thresh = cv2.threshold(
        blur,
        20,
        255,
        cv2.THRESH_BINARY
    )

    contours, _ = cv2.findContours(
        thresh,
        cv2.RETR_TREE,
        cv2.CHAIN_APPROX_SIMPLE
    )

    motion_detected = False

    for contour in contours:

        if cv2.contourArea(contour) < 1000:
            continue

        motion_detected = True

        x, y, w, h = cv2.boundingRect(contour)

        cv2.rectangle(
            frame1,
            (x, y),
            (x + w, y + h),
            (0, 255, 0),
            2
        )

    if motion_detected:
        cv2.putText(
            frame1,
            "Motion Detected",
            (20, 40),
            cv2.FONT_HERSHEY_SIMPLEX,
            1,
            (0, 0, 255),
            2
        )

        print("Motion Detected")
        current_time = time.time()

        if current_time - last_alert_time > 10:

            print("Sending Alert")

            send_alert()

            last_alert_time = current_time

    cv2.imshow(
        "Theft Guard Camera",
        frame1
    )

    cv2.imshow(
        "Motion Mask",
        thresh
    )

    frame1 = frame2

    ret, frame2 = cap.read()

    if not ret:
        break

    if cv2.waitKey(1) & 0xFF == ord('q'):
        break

cap.release()
cv2.destroyAllWindows()
